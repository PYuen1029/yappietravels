Vue.config.debug = true;

new Vue ({
	el: '#container',

	data: {
		blogPosts: [],
        pagination: {
            page: 1,
            previous: false,
            next: false, 
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
        this.paginateResource = this.$resource('/blog/:blogName/api/?page=:pageId');
        this.blogUrl = PHPObject.blogUrl;
        this.sentRequest = PHPObject.sentRequest;
        this.paginate();
    },

    methods: {
        paginate: function(direction) {
            if (direction === 'more') {
                ++this.pagination.page;
            }
            this.paginateResource.get({blogName: this.blogUrl, pageId: this.pagination.page}, function (data) {
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
        	return '/blog/' + this.blogUrl + '/blogPost/' + this.slugify(blogPost.title);
        },
        sendRequest: function() {
            this.requestResource.get({user: this.userUrl})
                .error(function (data) {
                    console.log("Error:" + JSON.stringify(data));
                });
            this.sentRequest = true;
            event.preventDefault();
        }
    }
});

function setData (instance, data) {
    if (instance.blogPosts.length === 0)
    {
    	instance.blogPosts = data.data;
    }

    else
    {
    	instance.blogPosts = instance.blogPosts.concat(data.data);
    }
    instance.pagination.next = data.next_page_url;
    instance.pagination.more = (typeof(data.next_page_url) === 'string');
}