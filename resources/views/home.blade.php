@extends('components.layouts.app')

@section('Title')
Welcome to my Site!
@endsection

@section('Subtitle')
This is my corner of the internet where i can, well... do whatever i guess! This is mainly an area where i can talk about personal stuff im doing, FOSS stuff and other GNU/Linux things!
@endsection

@section('slot')
<section class="bg-white dark:bg-gray-900">
  <div class="py-16 px-24 mx-64 max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Where you can find me</h2>
            <ul>
                <li>- <a class="underline hover:text-white" href="https://twitter.com/Cabooshy">Twitter</a></li>
                <li>- <a class="underline hover:text-white" href="https://github.com/Caboosh">GitHub</a></li>
                <li>- <a class="underline hover:text-white" href="https://gitlab.com/cabooshyy">GitLab</a></li>
                <li>- <a class="underline hover:text-white" href="https://www.youtube.com/@CBSHFPV">Youtube (RC, Drone, and FPV Drone Content)</a></li>
                <li>- My Discord Handle: cabooshy</li>
            </ul>
      </div>
  </div>
</section>
<section class="bg-white dark:bg-gray-900">
  <div class="py-16 px-24 mx-64 max-w-screen-xl lg:py-16 lg:px-6">
      <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
          <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Other Projects</h2>
          <p>I do some other things in my spare time (like maintain this site). Below is a list of other stuff i've been working on.</p>
            <ul>
                <li>- <a class="underline hover:text-white" href="https://gitlab.com/cbsh">CBSH - A Post Install Script for Arch Linux</a></li>
                <li>- <a class="underline hover:text-white" href="https://instagram.com/noire.jcw">My Car's Instagram, because she deserves it!</a></li>
            </ul>
      </div>
  </div>
</section>
@endsection