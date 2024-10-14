<x-guest-layout>
    @section('title', 'Property Conveyancing')

    <x-section-full id="conveyancing-made-easy">
        <div class="columns-1 lg:columns-2 lg:my-32">
            <div class="flex flex-col items-center">
                <div class="basis-1/3 space-y-8 mt-16">
                    <h2 class="text-5xl lg:text-6xl text-left font-serif">
                        Conveyancing Made Easy
                    </h2>
                    <x-content-button href="tel:89014705" id="see-our-services">
                        We’d love to help — Call us today <svg class="ml-2" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
                    </x-content-button>
                </div>
            </div>
            <div>
                <img src="img/hero.png" class="opacity-80 w-full h-auto">
            </div>
        </div>
    </x-section-full>



    <x-section-full id="settlements">
        <x-h type="h2">
            Why Choose Us?
        </x-h>
        <x-p>Navigating the complexities of residential property transactions can be challenging. Our experienced residential conveyancers ensure all aspects of your property transaction are handled with precision and care.</x-p>
        <div class="flex flex-row space-x-8">
            <div class="lg:basis-1/3 basis-full space-y-8">
                <h3 class="text-xl lg:text-2xl font-serif">Local Expertise</h3>
                <p>With in-depth knowledge of the Sydney real estate market and NSW property laws, our team is well-equipped to navigate the complexities of local transactions. We stay updated on the latest regulations and trends, ensuring you receive informed advice tailored to your specific area.</p>
            </div>
                <div class="lg:basis-1/3 basis-full space-y-8">
                    <h3 class="text-xl lg:text-2xl font-serif">Fixed Pricing</h3>
                    <p>At Landona Conveyancing, we believe in transparency and peace of mind. Our fixed pricing model means you’ll know the total cost upfront, with no hidden fees or surprises along the way. This allows you to budget confidently throughout your property transaction.</p>
                </div>
                <div class="lg:basis-1/3 basis-full space-y-8">
                    <h3 class="text-xl lg:text-2xl font-serif">Trusted Relationships with Agents</h3>
                    <p>Our strong connections with local real estate agents enhance our ability to serve you. We work collaboratively with agents to ensure a seamless process, leveraging our partnerships to address challenges quickly and effectively.</p>
                </div>
        </div>
        <div class="flex flex-row">
            <div class="lg:basis-1/3">
                <div class="lg:basis-1/3 space-y-8">
                    <h3 class="text-xl lg:text-2xl font-serif">Expert Guidance</h3>
                    <p>Our team provides personalized support tailored to your unique needs. Whether you're a first-time buyer, an investor, or selling your home, we are here to help.</p>
                </div>
            </div>
            <div class="lg:basis-1/3">
                <div class="lg:basis-1/3 space-y-8">
                    <h3 class="text-xl lg:text-2xl font-serif">Comprehensive Services</h3>
                    <p>We handle all aspects of the conveyancing process, from initial contract review to settlement. Our services include:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>Pre-purchase inspections</li>
                        <li>Contract drafting and review</li>
                        <li>Liaising with real estate agents, mortgage brokers, and legal advisors</li>
                        <li>Ensuring compliance with local regulations</li>
                    </ul>
                </div>
            </div>
        </div>
    </x-section>

    <div
    class="hero min-h-96"
    style="background-image: url(https://plus.unsplash.com/premium_photo-1697730198238-48ee2f2fe1b7?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
    <div class="hero-overlay bg-opacity-70"></div>
    <div class="hero-content text-neutral-content text-center">
      <div class="">
          <h2 class="mb-5 text-3xl lg:text-5xl text-center font-serif">Your Trusted Partner in Property Transactions</h2>
          <p class="mb-5  text-center">
              At Landona Conveyancing, we understand that buying or selling a property is one of the most significant decisions you will ever make. Our dedicated team of experienced conveyancers is here to guide you through every step of the process, ensuring a smooth and stress-free experience.
        </p>
      </div>
    </div>
  </div>

    <x-section id="settlements">
        <x-h type="h2">
            Over 2,000 Efficient Settlements
        </x-h>
        <x-p>
            Join over 2,000 satisfied clients who have entrusted us to handle their property matters with professionalism
            and care. We ensure your settlement process is seamless, stress-free, and handled with the utmost attention to
            detail.
        </x-p>
        <div class="my-4">
            <iframe src="https://www.google.com/maps/d/embed?mid=1wiSfjrr_Hu3UYsi3RmKo59bNsIkCGpuP&ehbc=2E312F"
                    class="w-full" height="520" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </div>
    </x-section>

    @include('parts.home.reviews')

    {{-- @include('parts/home/pexa') --}}

    {{-- @include('parts/home/q-and-a') --}}

    @include('parts/home/contact-us')

    <footer class="footer p-10">
        <nav>
          <h6 class="footer-title">Services</h6>
          <a class="link link-hover">Branding</a>
          <a class="link link-hover">Design</a>
          <a class="link link-hover">Marketing</a>
          <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
          <h6 class="footer-title">Company</h6>
          <a class="link link-hover">About us</a>
          <a class="link link-hover">Contact</a>
          <a class="link link-hover">Jobs</a>
          <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
          <h6 class="footer-title">Legal</h6>
          <a class="link link-hover">Terms of use</a>
          <a class="link link-hover">Privacy policy</a>
          <a class="link link-hover">Cookie policy</a>
        </nav>
      </footer>
</x-guest-layout>
