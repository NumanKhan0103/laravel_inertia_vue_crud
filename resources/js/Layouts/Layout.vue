<script setup>
// import { Link, Head } from '@inertiajs/vue3'; 

</script>

<template>

  <div>

    <Head>
      <title> My App</title>
      <meta head-key="description" name="description" content="default description of the App">
    </Head>
    <header>

      <nav class="flex">
        <div class="space-x-6">
          <Link :href="route('home')" class="nav-link" :class="{'bg-slate-700' : $page.component === 'Home'}">Home</Link>
        </div>
        <div v-if="$page.props.auth.user" class="space-x-6">
          <Link :href="route('dashboard')" class="nav-link"  :class="{'bg-slate-700' : $page.component === 'Admin/Dashboard'}">Dashboard</Link>
          <Link :href="route('logout')" class="nav-link" method="POST" as="button">Logout</Link>
        </div>
        <div v-else class="space-x-6">
          <Link :href="route('register')" class="nav-link"  :class="{'bg-slate-700' : $page.component === 'Auth/Register'}">Register</Link>
          <Link :href="route('login')" class="nav-link"  :class="{'bg-slate-700' : $page.component === 'Auth/Login'}">Login</Link>
        </div>
      </nav>

    </header>

    <main class="p-4">
      <slot />
    </main>
  </div>
</template>