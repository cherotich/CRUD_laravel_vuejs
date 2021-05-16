<template>
  <div class="container">
     
       <h2 class="text-center p-2 text-white bg-primary mt-5 head-two">
         
      Contacts
    </h2>
   
   
    <table class="table"> 
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Designation</th>
          <th scope="col">Contact</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody v-for="contact in contacts" :key="contact.id">
        <tr>
          <th scope="row">{{contact.id}}</th>
          <td >{{contact.name}}</td>
          <td>{{contact.email}}</td>
          <td >{{contact.designation}}</td>
          <td >{{contact.contact_no}}</td>
         <td><button class ="btn btn-danger bt-sm" @click.prevent="deleteContact(contact.id)">Delete</button></td> 

        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
name: 'Contact',
created(){
this.loadData();
},
methods:{
  loadData(){
    let url = this.url +'/api/getContacts';
    this.axios.get(url).then(
      response=>
    { 
       this.contacts = response.data
       console.log(this.contacts)
       }
    );
  },
  deleteContact(id){
let url = this.url + `/api/deleteContact/${id}`;
this.axios.delete(url).then(response =>{
if(response.status){
  this.loadData();
  this.$utils.showSuccess('success', response.message);

}
else
{
   this.$utils.showError('Error', response.message)

}
});
  }
  },
  mounted(){
    console.log("Contact list component mounted")
  },
  data(){
    return {
      url:document.head.querySelector('meta[name="url"]').content,
    contacts:[]
    }
  }

}
</script>
<style scoped>
.head-two{
  text-align:center;
  margin-top:90px;


}


</style>
