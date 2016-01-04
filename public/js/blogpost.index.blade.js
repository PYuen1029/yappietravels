Vue.config.debug = true;

new Vue ({
	el: '#container',
// I will make a component to handle both blog.index and blogPost.index pagination
	data: {
		blogPosts: [],
        pagination: {
            page: 1,
            previous: false,
            next: false
        },
        error: {
            message: null         
        },
        temp: {
            foo: null           
        },
        paginateResource: null,
        requestResource: null

	},
	ready: function() {
        this.paginateResource = this.$resource('/blogPost/api/?page=:pageId');
        this.paginate();
// first things first I need to make a route for blogPost/api that returns ALL blogPosts sorted by most recent. 
// then I will use this vue controller to make calls to that api and do just like blog.index.blade.js
    },

    methods: {
        paginate: function(direction) {
            if (direction === 'previous') {
                --this.pagination.page;
                this.goToAnchor('jump-to');

            }
            if (direction === 'next') {
                ++this.pagination.page;
                this.goToAnchor('jump-to');
            }
            this.paginateResource.get({pageId: this.pagination.page}, function (data) {
                setData(this, data);
            }).error(function (data) {
                console.log("Error:" + JSON.stringify(data));
            });

        },
        slugify: function(text) {
        	return text.toString().toLowerCase()
        			.replace(/\s+/g, '-')           // Replace spaces with -
				    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
				    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
				    .replace(/^-+/, '')             // Trim - from start of text
				    .replace(/-+$/, '');            // Trim - from end of text
		// CREDIT TO https://gist.github.com/mathewbyrne/1280286
        },
        urlOf: function(blogPost) {
        	return '/blog/' + this.slugify(blogPost.blog.name) + '/blogPost/' + this.slugify(blogPost.title);
        },
        goToAnchor: function(anchor) {
            var loc = document.location.toString().split('#')[0];
            document.location = loc + '#' + anchor;
            return false;
        }
    }
});

function setData (instance, data) {
    instance.blogPosts = data.data;
    instance.pagination.previous = data.prev_page_url;
    instance.pagination.next = data.next_page_url;
}