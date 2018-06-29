var app = new Vue({
  el:"#app",
  data: {
    users: [],
    status: 'Pending',
    firstName:'',
    address:'',
    id:'',
    itemId:'',
    itemName:'',
    itemAddress:'',
    itemTel:'',
    edit:null
  },
  mounted: function(){
    console.log("mounted");
    this.getAllItem();
  },

  methods: {

    getAllItem: function(){
      let self = this
      this.status = 'Loading'
      axios.get("http://localhost/test/get.php").then(function(response){
        app.users = response.data.users;
        setTimeout(function () {
          self.status = 'Success'
        }, 2000)
      }).catch(function(responseError){
        this.status = 'fail'
        alert('fail')
      })
    },

    createItem:function(){
      let infoInsert = []
      infoInsert.push({name:this.firstName,addr:this.address})
      axios.post("http://localhost/test/get.php", {infoInsert:infoInsert}) .then(function (response) {
        console.log(response)
        app.getAllItem();
      })
      .catch(function (error) {
        console.log(error);
      });

    },
    beforeUpdate:function(user){
      this.edit=user
      this.itemId=user.OrderID
      this.itemName=user.Name
      this.itemAddress=user.Address
      this.itemTel=user.Tel
    },

    updateItem:function(){
        //let infoUpdate.push({});
        axios.put("http://localhost/test/get.php", {
        //information:information
      }) .then(function (response) {
        console.log(response)
        app.getAllItem();
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    CancelUpdate:function(){
        this.edit=null
    },

    deleteItem:function(user){
      axios.delete(`http://localhost/test/get.php?id=${user.OrderID}`) .then(function (response) {
        console.log(response)
        app.getAllItem();
      })
      .catch(function (error) {
        console.log(error);
      });

    }
  }
});
