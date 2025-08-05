
<script
setup>
import { Head } from '@inertiajs/vue3';
</script>
<template>
<Head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</Head>
  <div class="container">
    <!-- Navbar -->
    <nav class="navbar">
      <ul class="nav-list">
        <li><a href="/user">Home</a></li>
        <li><a href="/">About</a></li>
      </ul>
    </nav>

    <!-- Konten dinamis dari halaman -->
    <main class="content">
      <slot />
    </main>
  </div>
</template>

<style scoped>
.container {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f2f2f2;
  min-height: 100vh;
  padding: 20px;
}

.navbar {
  background-color: #1e3a8a;
  padding: 1rem;
  border-radius: 8px;
}

.nav-list {
  list-style: none;
  display: flex;
  gap: 20px;
  margin: 0;
  padding: 0;
}

.nav-list a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  transition: color 0.3s;
}

.nav-list a:hover {
  color: #93c5fd;
}

.content {
  margin-top: 2rem;
}
</style>
