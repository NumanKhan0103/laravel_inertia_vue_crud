<template>
    



<!-- Admin Dashboard -->
<div class="min-h-screen bg-gray-100 flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-md py-4 px-4 md:px-6 lg:px-12">
      <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Logout</button>
      </div>
    </header>
  
    <!-- Main Content -->
    <main class="flex-1 p-4 md:p-6 lg:p-12">
      <!-- User Section -->
      <section class="mb-8">
        <h2 class="text-2xl font-bold mb-2">Users</h2>
        <div class="bg-white shadow-md p-4 rounded">
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Same</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="px-4 py-2">John Doe</td>
                <td class="px-4 py-2">john@example.com</td>
                <td class="px-4 py-2">Custom Value</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Jane Doe</td>
                <td class="px-4 py-2">jane@example.com</td>
                <td class="px-4 py-2">Custom Value</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
  
      <!-- Blog Section -->
      <section class="mb-8">
        <h2 class="text-2xl font-bold mb-2">Blogs</h2>
        <div class="bg-white shadow-md p-4 rounded">
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="px-4 py-2">Blog Post 1</td>
                <td class="px-4 py-2">This is a sample blog post.</td>
                <td class="px-4 py-2">2022-01-01</td>
              </tr>
              <tr>
                <td class="px-4 py-2">Blog Post 2</td>
                <td class="px-4 py-2">This is another sample blog post.</td>
                <td class="px-4 py-2">2022-01-15</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>
  </template>