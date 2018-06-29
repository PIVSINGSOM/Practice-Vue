
 var app = new Vue({
	el: '#app',
	data: {
		name:'Kraisorn!',
		lname:'Singsom',
		age:22,
		website: 'http://www.google.com',
		count:0,
		numbers:[]
	},

	methods:{
		getName:function(){
			return this.name
		},
		setName:function(n){
			return this.name=n
		},
		addAge:function(){
			this.age++;
			console.log(this.age);
		},
		SubtractAge:function(){
			this.age--;
			console.log(this.age);
		},
		addCount:function(){
			this.count++;
			console.log(this.count);
		}

	}
})

 var app2 =  new Vue({
 	el: '#app2',
 	data:{
 		like:false,
 		product:["one","two","three"],
 		employee:[
 			{name:"sawadee",age:22,Status:false},
 			{name:"arima",age:32,Status:false}

 		]
 	},
 	methods:{

 	}
 })

