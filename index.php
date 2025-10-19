<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Precious Adedokun - Resumé</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-6 font-sans">
  <div class="max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <div class="text-center space-y-3">
      <h1 class="text-4xl font-bold text-gray-900">Precious Adedokun</h1>
      <p class="text-xl text-teal-600 font-medium">Full Stack Developer • Backend Specialist</p>
      <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-600">
        <span>📧 <a href="mailto:apreezofficial@gmail.com" class="hover:underline">apreezofficial@gmail.com</a></span>
        <span>🌐 <a href="https://preciousadedokun.com.ng" class="text-teal-600 hover:underline" target="_blank">preciousadedokun.com.ng</a></span>
        <span>📍 Nigeria</span>
      </div>
      <div class="flex justify-center gap-6 mt-2 text-teal-600">
        <a href="https://github.com/apreezofficial" target="_blank" aria-label="GitHub"><i data-lucide="github" class="w-5 h-5"></i></a>
        <a href="https://www.linkedin.com/in/precious-adedokun-b58221350" target="_blank" aria-label="LinkedIn"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
        <a href="https://x.com/apcodesphere" target="_blank" aria-label="Twitter"><i data-lucide="twitter" class="w-5 h-5"></i></a>
      </div>
    </div>
    <!-- Summary -->
    <section class="border border-teal-100 bg-white rounded-xl p-6 shadow">
      <h2 class="text-2xl font-semibold text-teal-700 mb-2">Summary</h2>
      <p>Full Stack Developer passionate about building scalable backend systems, beautiful interfaces, and secure digital platforms. Skilled in Laravel, Livewire, React, MySQL, and API integrations. Thrives on clean architecture and impactful user experiences.</p>
    </section>
    <!-- Tech Stack -->
<section class="border border-teal-100 bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg">
  <h2 class="text-3xl font-bold text-teal-700 mb-6 flex items-center gap-2">
    <i data-lucide="cpu" class="w-6 h-6 text-teal-500"></i>
    Tech Stack
  </h2>

  <div class="grid sm:grid-cols-3 gap-6">
    <!-- Frontend -->
    <div class="p-4 rounded-xl border border-teal-50 bg-white hover:shadow-md transition">
      <h3 class="font-semibold text-gray-800 mb-3 border-b border-teal-50 pb-2">
        Frontend
      </h3>
      <div class="flex flex-wrap gap-2">
        <span class="tag">HTML</span>
        <span class="tag">CSS</span>
        <span class="tag">JavaScript</span>
        <span class="tag">React</span>
        <span class="tag">Next js</span>
      </div>
    </div>

    <!-- Backend -->
    <div class="p-4 rounded-xl border border-teal-50 bg-white hover:shadow-md transition">
      <h3 class="font-semibold text-gray-800 mb-3 border-b border-teal-50 pb-2">
        Backend
      </h3>
      <div class="flex flex-wrap gap-2">
        <span class="tag">PHP</span>
        <span class="tag">Laravel</span>
        <span class="tag">Livewire</span>
        <span class="tag">MySQL</span>
      </div>
    </div>

    <!-- Tools -->
    <div class="p-4 rounded-xl border border-teal-50 bg-white hover:shadow-md transition">
      <h3 class="font-semibold text-gray-800 mb-3 border-b border-teal-50 pb-2">
        Tools
      </h3>
      <div class="flex flex-wrap gap-2">
        <span class="tag">Git</span>
        <span class="tag">Docker</span>
        <span class="tag">Postman</span>
      </div>
    </div>
  </div>
</section>

<!-- Tag Styling -->
<style>
  .tag {
    @apply px-3 py-1 rounded-full text-sm font-medium border border-teal-100 bg-teal-50 text-teal-700 shadow-sm hover:bg-teal-100 transition;
  }
</style>
    <!-- Projects -->
<section class="border border-teal-100 bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg">
  <h2 class="text-3xl font-bold text-teal-700 mb-6 flex items-center gap-2">
    <i data-lucide="folder-kanban" class="w-6 h-6 text-teal-500"></i>
    Featured Projects
  </h2>

  <div class="grid gap-6 sm:grid-cols-2">
    <!-- Project Card -->
    <div class="group border border-teal-50 rounded-xl p-6 bg-white hover:shadow-xl hover:-translate-y-1 transition-all">
      <a href="https://proforms.top" target="_blank" class="flex items-center justify-between mb-2">
        <span class="text-lg font-semibold text-teal-700 group-hover:underline">
          Proforms - Dynamic Form Builder
        </span>
        <i data-lucide="arrow-up-right" class="w-5 h-5 text-teal-500"></i>
      </a>
      <p class="text-gray-600 mb-3">
        Create, share, and manage dynamic forms for data collection and workflow automation.
        Built with Laravel, Next.js & Livewire.
      </p>
      <div class="flex flex-wrap gap-2 text-sm">
        <span class="tag">Laravel</span>
        <span class="tag">Next.js</span>
        <span class="tag">Livewire</span>
      </div>
    </div>

    <!-- Project Card -->
    <div class="group border border-teal-50 rounded-xl p-6 bg-white hover:shadow-xl hover:-translate-y-1 transition-all">
      <a href="https://devbio.preciousadedokun.com.ng" target="_blank" class="flex items-center justify-between mb-2">
        <span class="text-lg font-semibold text-teal-700 group-hover:underline">
          DevBio - Portfolio Generator
        </span>
        <i data-lucide="arrow-up-right" class="w-5 h-5 text-teal-500"></i>
      </a>
      <p class="text-gray-600 mb-3">
        Tool for developers to generate interactive portfolios with GitHub integration
        and AI-enhanced bios.
      </p>
      <div class="flex flex-wrap gap-2 text-sm">
        <span class="tag">PHP</span>
        <span class="tag">Tailwind</span>
        <span class="tag">OpenAI API</span>
      </div>
    </div>

    <!-- Project Card -->
    <div class="group border border-teal-50 rounded-xl p-6 bg-white hover:shadow-xl hover:-translate-y-1 transition-all">
      <a href="https://drake.zya.me" target="_blank" class="flex items-center justify-between mb-2">
        <span class="text-lg font-semibold text-teal-700 group-hover:underline">
          Darke Clothing - Premium eCommerce Store
        </span>
        <i data-lucide="arrow-up-right" class="w-5 h-5 text-teal-500"></i>
      </a>
      <p class="text-gray-600 mb-3">
        Modern clothing eCommerce store featuring product filtering, secure checkout,
        admin panel and mobile-first design.
      </p>
      <div class="flex flex-wrap gap-2 text-sm">
        <span class="tag">Laravel</span>
        <span class="tag">Livewire</span>
        <span class="tag">MySQL</span>
      </div>
    </div>
  </div>
</section>

<!-- Tag Styling -->
<style>
  .tag {
    @apply px-3 py-1 rounded-full text-xs font-medium border border-teal-100 bg-teal-50 text-teal-700 hover:bg-teal-100 transition;
  }
</style>
    <!-- Education -->
    <section class="border border-teal-100 bg-white rounded-xl p-6 shadow">
      <h2 class="text-2xl font-semibold text-teal-700 mb-4">Education</h2>
      <div class="mb-4">
        <h3 class="font-semibold text-gray-900">Federal University Oye-Ekiti (FUOYE)</h3>
        <p class="text-teal-600">B.Sc. in Computer Science (In Progress)</p>
        <p class="text-sm text-gray-600">2025 – Present • Ekiti, Nigeria</p>
      </div>
      <div>
        <h3 class="font-semibold text-gray-900">Shepherd International College</h3>
        <p class="text-teal-600">Senior Secondary School Certificate</p>
        <p class="text-sm text-gray-600">Graduated 2024 • Ado-Ekiti, Nigeria</p>
      </div>
    </section>

    <!-- Extra -->
    <section class="border border-teal-100 bg-white rounded-xl p-6 shadow">
      <h2 class="text-2xl font-semibold text-teal-700 mb-4">Additional Info</h2>
      <div class="mb-4">
        <h3 class="font-semibold mb-1">Languages</h3>
        <p>English (Fluent), Yoruba (Fluent), French (Conversational)</p>
      </div>
      <div>
        <h3 class="font-semibold mb-1">Interests</h3>
        <div class="flex flex-wrap gap-2">
          <span class="tag bg-gray-100">Open Source</span>
          <span class="tag bg-gray-100">Tech Blogging</span>
          <span class="tag bg-gray-100">Mentoring</span>
        </div>
      </div>
    </section>
    <footer class="text-center text-sm text-gray-500 pt-6">References available upon request. © 2025</footer>
  </div>
  <style>
    .tag { @apply px-3 py-1 rounded-full text-sm border border-teal-200 bg-teal-50 text-teal-700; }
  </style>
  <script>lucide.createIcons();</script>
</body>
</html>
