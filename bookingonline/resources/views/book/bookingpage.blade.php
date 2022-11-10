<x-home-layout>
    <div class="py-12 mt-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <main class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="flex items-baseline justify-between pt-2 pb-6 border-b border-gray-200">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900">Booking Here</h1>
                        <div class="flex items-center">
                        <div date-rangepicker class="flex items-center">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text- gray- 400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                        </div>
                    </div>
                    <button type="button" class="inline-block h-10 px-6 py-2 mx-4 text-xs font-medium leading-tight text-white uppercase transition ease-in-out rounded-full bg-violet-600 hover:bg-violet-200 focus:outline-none focus:ring-0 duration- 150">Check</button>
                    </div>
                </div>
            <section>
            <div class="container pb-16">
            <div class="flex py-6 px-36 ">
                <input type="text" name="search" id="search"
                    class="w-full py-3 pl-12 pr-3 border border-r-0 border-primary rounded-l-md focus:outline-none"
                    placeholder="search">
                <button class="px-8 text-white transition border bg-violet-600 border-primary rounded-r-md">Search</button>
            </div>
            <div class="grid grid-cols-4 gap-6 my-6">
                <div class="overflow-hidden bg-white rounded shadow group">
                    <div class="relative">
                        <img src="https://www.baliaround.com/wp-content/uploads/2014/05/kecakdance.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-4 pt-4 pb-3">
                        <a href="#">
                            <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">Kecak Fire Gianyar</h4>
                        </a>
                        <p>First, one of the most-visited tourist attractions in Bali is Ubud...</p>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl font-semibold text-primary">Rp. 90.000</p>
                            <p class="text-sm text-gray-400 line-through">Rp. 100.000</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="ml-3 text-xs text-gray-500">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white transition border rounded-b bg-violet-600 border-primary hover:bg-violet-400">Add
                        to cart</a>
                </div>
                <div class="overflow-hidden bg-white rounded shadow group">
                    <div class="relative">
                        <img src="https://www.baliaround.com/wp-content/uploads/2014/05/kecakdance.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-4 pt-4 pb-3">
                        <a href="#">
                            <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">Kecak Sanur</h4>
                        </a>
                        <p>First, one of the most-visited tourist attractions in Bali is Ubud...</p>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl font-semibold text-primary">Rp. 150.000</p>
                            <p class="text-sm text-gray-400 line-through">Rp. 200.000</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="ml-3 text-xs text-gray-500">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white transition border rounded-b bg-violet-600 border-primary hover:bg-violet-400">Add
                        to cart</a>
                </div>
                <div class="overflow-hidden bg-white rounded shadow group">
                    <div class="relative">
                        <img src="https://www.baliaround.com/wp-content/uploads/2014/05/kecakdance.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-4 pt-4 pb-3">
                        <a href="#">
                            <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">Kecak Ramayana</h4>
                        </a>
                        <p>First, one of the most-visited tourist attractions in Bali is Ubud...</p>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl font-semibold text-primary">Rp. 100.000</p>
                            <p class="text-sm text-gray-400 line-through">Rp. 150.000</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="ml-3 text-xs text-gray-500">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white transition border rounded-b bg-violet-600 border-primary hover:bg-violet-400">Add
                        to cart</a>
                </div>
                <div class="overflow-hidden bg-white rounded shadow group">
                    <div class="relative">
                        <img src="https://www.baliaround.com/wp-content/uploads/2014/05/kecakdance.jpg" alt="product 1" class="w-full">
                        <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-4 pt-4 pb-3">
                        <a href="#">
                            <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">Kecak Fire</h4>
                        </a>
                        <p>First, one of the most-visited tourist attractions in Bali is Ubud...</p>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl font-semibold text-primary">Rp. 110.000</p>
                            <p class="text-sm text-gray-400 line-through">Rp. 150.000</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="ml-3 text-xs text-gray-500">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white transition border rounded-b bg-violet-600 border-primary hover:bg-violet-400">Add
                        to cart</a>
                </div>
            </div>      
            <div class="pt-6 font-sans text-center ">
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text- gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Previous 
                </a>
                <!-- Next Button -->
                <a href="#" class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text- gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
                </a>
            </div>
            </section>
            <div class="items-center justify-center">
                <div class="mt-2 leading-loose">
                    <form class="w-full border rounded-lg bg-violet-600 p-14">
                        <p class="mb-2 text-xl font-bold text-center uppercase text-dark">Validasi Pemesanan</p>                 
                        <div class="">
                            <label class="block text-base text-dark" for="cus_email">Nama</label>
                            <input class="w-full px-2 py-2 text-gray-500 bg-gray-200 rounded infoNama border-slate-300" id="cus_email"
                                placeholder="Nama Lengkap"
                                aria-label="Email">
                        </div>
                        <div class="mt-2">
                            <label class="block text-base text-dark" for="cus_email">Email</label>
                            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border-slate-300" id="cus_email"
                                placeholder="Email"
                                aria-label="Email" id="addEmail">
                        </div>
                        <div class="mt-2">
                            <label class="block text-base text-dark" for="cus_email">Alamat</label>
                            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border-slate-300" id="cus_email"
                                placeholder="Alamat Kamu"
                                aria-label="Email" id="addAlamat">
                        </div>
                        <div class="mt-2">
                            <label class="block text-base text-dark" for="cus_email">No.Hp</label>
                            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded border-slate-300" id="cus_email"
                                placeholder="No Handphone"
                                aria-label="Email" id="addNo">
                        </div>
                        <div class="px-4 py-6 border-gray-200 sm:px-6">
                            <div class="flex text-base font-medium text-gray-900">
                                <p>Total (Rp.)</p>
                                <p id="total">0</p>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="flex items-center justify-center py-3 text-base font-medium bg-white border border-transparent rounded-md shadow-sm w-30 text-dark">ADD</a>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>                                   
        </main>
        </div>
    </div>
</x-home-layout>