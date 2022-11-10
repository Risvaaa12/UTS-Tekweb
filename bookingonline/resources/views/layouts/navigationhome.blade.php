<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
<!-- Primary Navigation Menu -->
<nav class="fixed z-20 flex justify-between w-full py-1 font-medium text-white bg-violet-600">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="flex items-center w-full py-2 px-7 lg:px-12 ">
        <div class="flex">
            <a href="index .html">
                <h1 class="text-3xl font-bold">rsv.</h1>
            </a>
        </div>
        <!-- Nav Links -->
        <ul class="hidden px-4 mx-auto ml-10 space-x-20 lg:flex font-heading ">
            <li><a class="hover:text-gray-200" href="index .html">Home</a></li>
            <li><a class="hover:text-gray-200" href="#">About Us</a></li>
            <li><a class="hover:text-gray-200" href="#">Contact</a></li>
            <li><a class="hover:text-gray-200" href="#">FAQ's</a></li>
        </ul>


        <!-- Header Icons -->
        <div class="items-center hidden mr-6 space-x-8 lg:flex">
            <a class="flex items-center hover:text-gray-200" href="#">
                <h4 class="px-4">Sign In</h4>
                <i class="fa fa-sign-in" aria-hidden="true"></i>
            </a> 
            <a class="flex items-center text-white rounded-full bg-violet-600 hover:text-gray-200" href="#">
                <h4 class="px-4 py-1">Sign Up</h4>
                <i class="fa fa-user-circle" aria-hidden="true"></i>  
            </a>      
        </div>
    </div>

    <!-- Responsive -->
        <div class="fixed relative group z-100 lg:hidden">
            <div class="flex items-center group-hover:border-grey-light">
                <a class="self-center py-2 mr-10 navbar-burger hover:text-gray-100 xl:hidden" href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="absolute z-50 flex flex-col items-center invisible bg-white bg-cover border rounded-md w-36 right-12 group-hover:visible">
                <ul class="flex flex-col pb-2 pt-">
                    <li class="py-1"><a class="hover:text-gray-200" href="index .html">Home</a></li>
                    <li class="py-1"><a class="hover:text-gray-200" href="#">About</a></li>
                    <li class="py-1"><a class="hover:text-gray-200" href="#">Contact</a></li>
                    <li class="py-1"><a class="hover:text-gray-200" href="#">FAQ's</a></li>
                </ul>
                <hr class="w-full border border-t-dark-400">
                <div class="flex flex-col py-2">
                    <a class="flex items-center py-1 hover:text-gray-200" href="#">
                        <h4 >Cart</h4>
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </a> 
                    <a class="flex items-center py-1 hover:text-gray-200" href="#">
                        <h4 >Sign In</h4>
                        <i class="px-2 fa fa-sign-in" aria-hidden="true"></i>
                    </a> 
                    <a class="flex items-center py-1 hover:text-gray-200" href="#">
                        <h4 >Sign Up</h4>
                        <i class="px-2 fa fa-user-circle" aria-hidden="true"></i>  
                    </a>      
                </div>
            </div>
        </div>        
    </nav> 
</nav>

