<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="./" class=" text-gray-300 <?= str_contains($_SERVER['REQUEST_URI'], 'index.php') ?
                            'bg-gray-900 text-white' : '' ?> rounded-md  px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white">Home</a>
                        <a href="about" class=" text-gray-300 <?= str_contains($_SERVER['REQUEST_URI'], 'about.php') ?
                            'bg-gray-900 text-white' : '' ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white">About</a>
                        <a href="contact" class="text-gray-300 <?= str_contains($_SERVER['REQUEST_URI'], 'contact.php') ?
                            'bg-gray-900 text-white' : '' ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white">Contact</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


</nav>