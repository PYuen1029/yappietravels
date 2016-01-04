Vue.config.debug = true;

new Vue ({
	el: '#container',
// I will make a component to handle both blog.index and blogPost.index pagination
	data: {
		blogs: [],
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
        this.paginateResource = this.$resource('/blog/api/?page=:pageId');
        this.paginate();
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
        urlOf: function(blog) {
        	return '/blog/' + this.slugify(blog.name);
        },
        goToAnchor: function(anchor) {
            var loc = document.location.toString().split('#')[0];
            document.location = loc + '#' + anchor;
            return false;
        }
    }
});

function setData (instance, data) {
    instance.blogs = data.data;
    instance.pagination.previous = data.prev_page_url;
    instance.pagination.next = data.next_page_url;
}