new Vue ({
	el: '#container',

	data: {
		blogPosts: [],
        pagination: {
            page: 1,
            more: false,
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
            if (direction === 'more') {
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

    // SOMEHOW OR ANOTHER, I WILL PROBABLY HAVE TO ADD E.G., DATA.DATA.PATH OR SOMETHING TO EACH DATA.DATA OBJECT. I DON'T KNOW EXACTLY HOW THE OBJECT IS EVEN COMPRISED, BUT I DON'T SEE HOW I CAN ACCESS THE DATA INSIDE A JAVASCRIPT OBJECT WITH PHP. MAYBE I CAN INSERT THE ID OF DATA.BLOGPOSTS[X] INTO A  HIDDEN HTML ELEMENT, WHICH I BELIEVE PHP CAN ACCESS? 
    // TWO PROBLEMS
    // 
    	// COMMUNICATION GAP BETWEEN PHP AND JAVASCRIPT, CAN'T SEND URL FOR THE POST, AND BLOG NAME
    	// PASS THE PHP GetUrlForThisName for $user->blog
    	// 
    	// 
    // 
    	// READ MORE INSTEAD OF LISTING ALL PAGES
    	// 
    	//  WILL JUST HAVE TO CHANGE setData TO MAKE IT APPEND data.data TO THE blogPosts OBJECT. 
    	//  
    	//  make instance.pagination.more true if data.next_page_url exists
    	//  
    	//  
}