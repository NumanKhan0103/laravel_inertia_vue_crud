<script setup>
  import { Link, Head } from '@inertiajs/vue3'; 
 
  </script>

<template>
    <Head>
        <title> My App</title>
        <meta head-key="description" name="description" content="default description of the App">
    </Head>
    <div class="h-screen flex overflow-hidden">
      <!-- Sidebar -->
      <div class="w-64 bg-gray-800 overflow-y-auto py-4 px-3">
        <div class="text-lg font-bold text-white mb-4">Admin Panel</div>
        <ul>
          <li class="mb-4">
            <Link  href="/" class="text-gray-300 hover:text-white">Home</Link>
          </li>
          <li class="mb-4">
            <Link  href="/about" class="text-gray-300 hover:text-white">About</Link>
          </li>
        </ul>
      </div>
  
      <!-- Main Area -->
      <div class="flex-1 overflow-y-auto py-4 px-3">
        <slot />
        <!-- <router-view /> -->
      </div>
    </div>
  </template>
  
  