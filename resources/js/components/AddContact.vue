<template>
  <div>
   <div class="container">
        <h2 class="text-center p-2 text-white bg-primary mt-5 head-two">
     Add Contacts
    </h2>
    <div class="card-body">
        <div class="col-md-6 offset-md-3">
            <form class="action">
<div class="fom-group">
    <label for="name" class="name">Name</label>
    <input type="text" id="name" class="form-control" 
    placeholder="Enter Name">
</div>

<div class="fom-group">
    <label for="email" class="name">Email</label>
    <input type="email" id="email" class="form-control" 
    placeholder="Enter Email">
</div>

<div class="fom-group">
    <label for="designation" class="name">Designation</label>
    <input type="text" id="designation" class="form-control" 
    placeholder="Enter Designation">
</div>
<div class="fom-group">
    <label for="name" class="name">Contact Number</label>
    <input type="number" id="contact_no" class="form-control" 
    placeholder="Enter Name">
</div>
<div class="fom-group">
    <label for="bio" class="name">Biography</label>
    <input type="text" id="bio" class="form-control" 
    placeholder="Enter Biography">
</div>

<div class="custom-file">
    <input type="file" class="custom-file-input"
    id="validatedCustomFile">
    <label for="validatedCustomFile" class="custom-file-label">Choose file...</label>
</div>
<bttton class="btn btn-primary mt-4">Submit</bttton>
            </form>
        </div>
        </div>
   </div>
  </div>
</template>

<script>
export default {
name:"add_contact"
}
</script>

<style scoped>
.head-two{
  text-align:center;
  margin-top:90px;


}


</style>