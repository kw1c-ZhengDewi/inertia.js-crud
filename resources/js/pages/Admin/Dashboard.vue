<script setup>
import { route } from 'ziggy-js'
</script>

<template>
  <div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white flex flex-col">
      <div class="p-4 text-xl font-bold border-b border-gray-700">
        Admin Panel
      </div>
      <nav class="flex-1 p-4 space-y-2">
        <a
          :href="route('admin.dashboard')"
          class="block px-3 py-2 rounded hover:bg-gray-700"
        >
          Home
        </a>
        <a
          :href="route('admin.users')"
          class="block px-3 py-2 rounded hover:bg-gray-700"
        >
          Users
        </a>
        <a
          :href="route('admin.settings')"
          class="block px-3 py-2 rounded hover:bg-gray-700"
        >
          Settings
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h1 class="text-2xl font-bold">Admin Dashboard</h1>
      <p class="text-gray-700">Welcome to the admin panel.</p>

    <!-- Content -->
      <div>

      </div>
    </main>
  </div>
</template>

<!-- Custom CSS  -->
<style scoped>
/* Optional: add custom styles if needed */
</style>
