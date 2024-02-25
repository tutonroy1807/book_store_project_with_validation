<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <section class="container mx-auto mt-24">
        <div>
            <h2 class="text-5xl text-center font-extrabold">Let's Talk</h2>
            <p class="text-2xl mt-4 font-bold text-center">Share your exicitement with us <span
                    class="text-orange-300 text-3xl font-bold italic">bitbookbazar12@gmail.com</span></p>
        </div>
    </section>
    <section>
        <div class="container mx-auto shadow-2xl p-24 mt-24 mb-24 ">

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5 ">
                <input
                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text" placeholder="First Name*" />
                <input
                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Last Name*" />
                <input
                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="email" placeholder="Email*" />
                <input
                    class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="number" placeholder="Phone*" />
            </div>
            <div class="my-4">
                <textarea placeholder="Message*"
                    class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="my-2 w-1/2 lg:w-1/4">
                <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                    Send Message
                </button>
            </div>
        </div>


        </div>
    </section>

    <?php
    include "footer.php";
    ?>
</body>

</html>