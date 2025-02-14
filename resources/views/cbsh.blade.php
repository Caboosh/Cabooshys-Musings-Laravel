@extends('components.layouts.app')

@section('Title')
CBSH - A Post Install Script for Arch Linux
@endsection

@section('Subtitle')
CBSH is a post installation script for Arch Linux. 
<br>
It installs Cabooshy's Qtile Desktop along with some programs he personally uses to make a lightweight DE.
@endsection 

@section('slot')
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-24 mx-64 max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">CBSH - A Post Install Script for Arch Linux.</h2>
            <p class="py-8">CBSH is the name of my Post Installation Script for Arch and Debian(WIP). It installs my Qtile Desktop, along with a bunch of supporting programs i use.</p>
            <figure>
                <img src="https://i.imgur.com/aYjELI8.png" alt="An Example of my Desktop"/>
                <figcaption> An Example of my Qtile Desktop, running a couple terminal emulators and Doom Emacs </figcaption>
            </figure>
            <br>
            <hr>
      </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-24 mx-64 max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Theme Showcase</h2>
          <a class="underline hover:text-white" href="/cbsh/showcase">Click Me</a> to see some previews of the default themes available for the desktop.
      </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-24 mx-64 max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Package List / CBSH Source Code</h2>
          <br>
          <h3 class="mb-4 text-2xl tracking-tight font-bold text-gray-900 dark:text-white">-- Arch Linux Repos</h3>
            <ul>
                <li>
                    <a class="underline hover:text-white" href="https://gitlab.com/cbsh/cbsh-arch/cbsh">CBSH Arch Postinstall Script</a>
                </li>
                <li>
                    <a class="underline hover:text-white" href="https://gitlab.com/cbsh/cbsh-arch/cbsh-arch-repo">CBSH Arch Linux Repository</a>
                </li>
                <li>
                    <a class="underline hover:text-white" href="https://gitlab.com/cbsh/cbsh-arch/cbsh-arch-pkgbuild">CBSH Arch Linux PKGBUILDs</a>
                </li>
            </ul>
            <br>
          <h3 class="mb-4 text-2xl tracking-tight font-bold text-gray-900 dark:text-white">-- Shared Repos</h3>
            <ul>
                <li>
                    <a class="underline hover:text-white" href="https://gitlab.com/cbsh/cbsh-configs">CBSH Config Files Repository</a>
                </li>
                <li>
                    <a class="underline hover:text-white" href="https://gitlab.com/cbsh/st-cbsh">CBSH Specific Build of ST</a>
                </li>
                <li>
                    <a class="underline hover:text-white" href="https://gitlab.com/cbsh/dmenu-cbsh">CBSH Specific Build of dmenu</a>
                </li>
            </ul>
            <br>
      </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-24 mx-64 max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
          <h3 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Installing CBSH</h3>
          <p>To install CBSH on Arch Linux and Arch based Linux Distros, run the below:</p>
          <div class="relative mx-auto mt-8 mb-16">
            <div class="bg-gray-700 text-white p-4 rounded-t-lg">
                <div class="flex justify-between items-center">
                    <span class="text-gray-300">Code:</span>
                        <button class="cbsh bg-gray-800 hover:bg-gray-600 text-gray-300 px-3 py-1 rounded-md" data-clipboard-target="#code">
                        Copy
                        </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <pre id="code" class="pb-8 px-12 rounded-b-lg bg-gray-800"><code>
$ git clone https://gitlab.com/cabooshyy/cbsh/cbsh-arch/cbsh.git
$ cd cbsh
$ ./cbsh</code></pre>
            </div>
          </div>

        <p class="pb-4">What this does:</p>
        <ul class="list-decimal list-inside">
            <li class="pb-4">
                Clones the CBSH Script repo to your machine 
                (even though i created the script and know its safe, i encourage you to look 
                at the scripts before running them, something you should be doing with ALL scripts 
                you download from the internet, not just mine because i said you should.)
            </li>
            <li class="pb-4">
                cd's into the new cbsh directory
            </li>
            <li class="pb-16">
                runs the cbsh script
            </li>
        </ul>
        <p class="pb-2">
            From here, the script will guide you through installing CBSH to your liking, you will need 
            to reboot your pc to start using CBSH, the script is not to be run with sudo!
        </p>
        <p class="pb-2">
            If required, you will be asked fo your sudo password to install programs from the Arch Repositories 
            and build programs, such as ST and dmenu. running the script with sudo can and will cause issues as we 
            do not want to mess with the root user.
        </p>
        <p>
            The Script does have safeguards to prevent it being run with sudo, and will exit after warning you why 
            the script cannot be run with sudo.
        </p>
      </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-24 mx-64 max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">How do i update CBSH</h2>
          <p>Using your Package Manager! Just update your system as you normally would and if there are updates to the packages they will be downloaded and placed inside /etc/cbsh.</p>
          <br>
          <p>We never touch $HOME! Why? Because we don't want to overwrite any existing configs, and any changes you may have made to them since installing CBSH. So its up to you to copy them from /etc/cbsh to your $HOME directory should you want to use the updated configuration files.</p>
          <br>
          <p>As an example, say i'd pushed an update to zsh-cbsh and you wanted to use the updated config file, you'd copy the new file from /etc/cbsh into your $HOME, and if i'd pushed an update to qtile-cbsh you'd do the same procedure, but remember its inside a .config directory, your file manager likely has dotfiles hidden by default (Most, if not all have CTRL+H as the "Hide/Unhide hidden files" keybind). and copy the new config to your $HOME's .config directory.</p>
      </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="py-16 px-24 mx-64 max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Setting a Wallpaper</h2>
          <p>By Default, i do not provide a wallpaper setter, because Qtile has built-in support for setting a wallpaper. However, should you want to use one, you can easily remove the "wallpaper=" declaration in the screen setup section of the qtile config and use a program such as feh, nitrogen, sxiv etc. to manage and set your wallpapers.</p>
      </div>
          <div class="relative mx-auto mt-8 mb-16">
            <div class="bg-gray-700 text-white p-4 rounded-t-lg">
                <div class="flex justify-between items-center">
                    <span class="text-gray-300">Code:</span>
                </div>
            </div>
            <div class="overflow-x-auto">
                <pre class="pb-8 px-12 rounded-b-lg bg-gray-800"><code>...

screens = [
      Screen(
	      wallpaper = Wallpaper.wallpaper, # These are what you want to change/delete
	      wallpaper_mode='fill', # if you're not using the built in wallpaper setter, remove this
	      top=bar.Bar(widgets=init_widgets_screen1(), margin=[7,5,0,5], size=27, background="#00000000"),
      ),
      
    # This Declaration only matters if you're using two monitors, you can remove this if you're not
      Screen( 
	      wallpaper = Wallpaper.wallpaper, 
	      wallpaper_mode='fill', 
	      top=bar.Bar(widgets=init_widgets_screen2(), margin=[7,5,0,5], size=27, background="#00000000"),
      ),
]

...</code></pre>
            </div>
          </div>
  </div>
</section>
@endsection