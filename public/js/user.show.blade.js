new Vue ({
	el: '#container',

	data: {
		blogPosts: {},
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
        resource: null
	},

	ready: function() {
        this.resource = this.$resource('/blog/:blogName/api/?page=:pageId');
        this.paginate();
    },

    methods: {
        paginate: function(direction) {
            if (direction === 'previous') {
                --this.pagination.page;
            }
            else if (direction === 'next') {
                ++this.pagination.page;
            }
            this.resource.get({blogName: 'Amet-aut-velit-sit-et', pageId: this.pagination.page}, function (data) {
                console.log(data);

                setData(this, data);
            }).error(function (data) {
                console.log("Error:" + JSON.stringify(data));
           });
        }
    }
});

function setData (instance, data) {
    instance.blogPosts = data.data;
    instance.pagination.previous = data.prev_page_url;
    instance.pagination.next = data.next_page_url;

    // SOMEHOW OR ANOTHER, I WILL PROBABLY HAVE TO ADD E.G., DATA.DATA.PATH OR SOMETHING TO EACH DATA.DATA OBJECT. I DON'T KNOW EXACTLY HOW THE OBJECT IS EVEN COMPRISED, BUT I DON'T SEE HOW I CAN ACCESS THE DATA INSIDE A JAVASCRIPT OBJECT WITH PHP. MAYBE I CAN INSERT THE ID OF DATA.BLOGPOSTS[X] INTO A  HIDDEN HTML ELEMENT, WHICH I BELIEVE PHP CAN ACCESS? 
}