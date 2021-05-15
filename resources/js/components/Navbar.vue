<template>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav me-auto mb-2 mb-md-0">
<li class="nav-item active">
    <router-link class="nav-link" to="/">
        Home

    </router-link>
</li>
<li class="nav-item">
    <router-link class="nav-link" to="/contacts">
        Contact

    </router-link>

</li>
</ul>

</div>
</div>
  </nav>
</template>

<script>
export default {
name: 'Navbar'
}
</script>

