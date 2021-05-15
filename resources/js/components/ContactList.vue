<template>
  <div>
    <h2 class="text-center p-2 text-white bg-primary mt-5">
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
      <tbody>
        <tr>
          <td scope="row">1</td>
          <td scope="row">name</td>
          <td scope="row">test@gmail.com</td>
          <td scope="row">dev</td>
          <td scope="row">4756487363</td>
         <td><button class ="btn btn-danger bt-sm">Delete</button></td> 

        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
name: 'Contact',
created(){

},
methods:{
  loadData(){
    let url = this.url
  }
}
}
</script>

