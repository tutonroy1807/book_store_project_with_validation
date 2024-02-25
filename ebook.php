<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <!-- EBOOK SECTION -->
    <section class="container mx-auto mt-32">
        <div class="flex justify-between">
            <div>
                <h2 class="text-4xl font-extrabold">ALL EBOOKS</h2>
            </div>
            <div class="flex gap-x-2">
                <div>
                    <label class="input input-bordered flex items-center gap-2">
                        <input type="text" class="grow" placeholder="Search" />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4 opacity-70">
                            <path fill-rule="evenodd"
                                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </label>
                </div>
                <div>
                    <button class="btn p-2 btn-active btn-accent">Search</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Read Books Online -->

    <section class="container mx-auto">
        <div class=" justify-between grid grid-cols-3 gap-x-4 gap-y-4 mt-12 mb-12">
            <div class="card card-side bg-base-100 shadow-xl">
                <figure><img src="images/biog2.jpg" alt="Movie" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">New Book is released!</h2>
                    <p>Click the button to visit <br> the online book page on our website.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">READ BOOKS</button>
                    </div>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl">
                <figure><img src="images/Book 3.jpg" alt="Movie" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">New Book is released!</h2>
                    <p>Click the button to visit <br> the online book page on our website.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">READ BOOKS</button>
                    </div>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl">
                <figure><img src="images/Book 1.jpg" alt="Movie" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">New Book is released!</h2>
                    <p>Click the button to visit <br> the online book page on our website.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">READ BOOKS</button>
                    </div>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl">
                <figure><img src="images/Book 2.jpg" alt="Movie" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">New Book is released!</h2>
                    <p>Click the button to visit <br> the online book page on our website.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">READ BOOKS</button>
                    </div>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl">
                <figure><img src="images/Book 11.jpg" alt="Movie" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">New Book is released!</h2>
                    <p>Click the button to visit <br> the online book page on our website.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">READ BOOKS</button>
                    </div>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-xl">
                <figure><img src="images/Book 14.jpg" alt="Movie" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">New Book is released!</h2>
                    <p>Click the button to visit <br> the online book page on our website.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">READ BOOKS</button>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Pagination -->

    <section>
        <div class="text-center mb-8">
            <div class="join gap-x-2">
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="1" checked />
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="2" />
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="3" />
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="4" />
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="5" />
                <input class="join-item btn btn-square p-2" type="radio" name="options" aria-label="Next" />
                
            </div>
        </div>
    </section>

    <!-- footer section -->

    <?php
    include "footer.php";
    ?>




</body>

</html>