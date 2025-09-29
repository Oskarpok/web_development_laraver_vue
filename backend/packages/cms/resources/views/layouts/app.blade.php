<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" 
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" 
			crossorigin="anonymous" 
			referrerpolicy="no-referrer"/>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
		@vite('resources/css/cms.css')
	</head>
	<body class="cms-primary-color text-white">
		<div class="flex">
      <aside class="w-64 h-screen bg-[#030712] text-white flex flex-col">
        <div class="flex items-center justify-center h-16 border-b border-gray-700">
          <i class="fa-solid fa-layer-group cms-secondary-color text-2xl"></i>
          <span class="cms-secondary-color font-bold text-xl">UAR CMS</span>
        </div>

        <div class="flex flex-col items-center py-4 border-b border-gray-700">
          <div class="flex items-center justify-center text-center">
            <span class="font-semibold break-words leading-tight">
              user first_name user sur_name
            </span>
          </div>
          <span class="text-sm text-gray-400">
            usertype
          </span>
        </div>

        <nav class="flex-1 overflow-y-auto px-4 py-4 space-y-6 text-sm">
          <div>
            <h3 class="text-gray-500 uppercase tracking-wide mb-2">Dashboard</h3>
            <a href="#" class="flex items-center px-2 py-2 bg-gray-800 rounded 
              cms-secondary-color">
                <span>Dashboard</span>
            </a>
          </div>
            naw elents
        </nav>
      </aside>
			<div class="flex flex-col flex-1">
				header
				<main class="flex-1 mx-4">
					@yield('content')
				</main>
			</div>
		</div>
		<footer class="bg-[cms-background-color] text-gray-400 py-6 text-center 
      border-t border-gray-700">
        <p>
          &copy; 2025 
          <span class="text-white font-semibold">UAR CMS</span>
          All rights reserved.
        </p>
    </footer>
	</body>
</html>