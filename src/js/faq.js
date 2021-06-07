


  var faq = new Vue({
     el:"#faq",
     data:{
        view:[0,0,0,0,0],
     },
     methods:{
        viewTrue: function(e){

           console.log(this.view[e]);
           if (this.view[e] == 0) {
              this.updateTrue(e);
              return this.view[e];
           }else{
             this.updateFalse(e);
             return this.view[e];
          }

        },
        updateTrue: function(e){
               Vue.set(this.view, e, 1);
         },
         updateFalse: function(e){
                Vue.set(this.view, e, 0);
          },
     }
 });
