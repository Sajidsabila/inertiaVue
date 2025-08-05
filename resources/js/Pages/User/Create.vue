<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  email: '',
  password: '',
})

const submit = () => {
  form.post('/user/store')
}
</script>

<template>
  <div class="container mt-4">
    <h1 class="mb-4">Create User</h1>
    <form @submit.prevent="submit">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input id="name" v-model="form.name" type="text" class="form-control" />
        <div v-if="form.errors.name" class="text-danger">{{ form.errors.name }}</div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" v-model="form.email" type="email" class="form-control" />
        <div v-if="form.errors.email" class="text-danger">{{ form.errors.email }}</div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" v-model="form.password" type="password" class="form-control" />
        <div v-if="form.errors.password" class="text-danger">{{ form.errors.password }}</div>
      </div>

      <button type="submit" class="btn btn-primary" :disabled="form.processing">
        {{ form.processing ? 'Submitting...' : 'Submit' }}
      </button>
    </form>
  </div>
</template>
