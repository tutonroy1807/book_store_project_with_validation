<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabvar</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section>
        <div class="navbar fixed top-0 z-50 bg-black text-white ">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">BITBOOKBAZAR</a>
            </div>
            <div class="flex-none gap-4">
                <div class="flex-1 p-3   bold   mr-64">
                    <a href="index.php">Home</a>
                    <a href="ebook.php">Ebooks</a>
                    <a href="">Catagories</a>
                    <a href="contact.php">Contact</a>
                    <a href="">Shoping cart</a>
                </div>
                <div class="form-control text-black">
                    <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                </div>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            
                            <img alt="Tailwind CSS Navbar component"
                                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-black rounded-box w-52">
                        
                        <li><a href="logout.php">Logout</a></li>
                        <li><input type="checkbox" value="synthwave" class="toggle theme-controller"/></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>