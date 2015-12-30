Vue.config.debug = true;

new Vue ({
	el: '#container',

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
// I need a backend controller to return a list of paginated blogs (using simplepaginate). Then a frontend here to paginate through it.
	ready: function() {
        this.paginateResource = this.$resource('/blog/api/?page=:pageId');
        this.paginate();
    },

    methods: {
        paginate: function(direction) {
            if (direction === 'previous') {
                --this.pagination.page;
            }
            if (direction === 'next') {
                ++this.pagination.page;
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
        }
    }
});

function setData (instance, data) {
    instance.blogs = data.data;
    instance.pagination.previous = data.prev_page_url;
    instance.pagination.next = data.next_page_url;
}