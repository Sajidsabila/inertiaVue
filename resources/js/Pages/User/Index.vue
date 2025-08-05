<script setup>
import { Head } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
defineProps({
    users: Object
})

function createUser() {
  router.get('/user/create')
}

</script>
<template>
<Head title="User List"></Head>
<h1>Ini User</h1>
<button href ="/user/create" @click="createUser" class="btn btn-primary btn-sm my-5">Create User</button>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
    </tr>
  </thead>
  <tbody>
    <tr v-for="(user, index) in users" :key="index">
    <td>{index + 1}</td>
    <td>{user.name}</td>
    <td>{user.email}</td>
     
    </tr>
    
  </tbody>
</table>
</template>