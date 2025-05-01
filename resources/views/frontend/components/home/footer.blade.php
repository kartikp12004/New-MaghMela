<footer class="bg-[#003F50] pt-8 text-white">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 text-center px-4 sm:px-6">
    
    <!-- About Us Section -->
    <section aria-labelledby="footer-about">
      <h2 id="footer-about" class="text-[#ffcc00] text-lg md:text-xl font-medium">
        About Us
      </h2>
      <p class="text-sm sm:text-base mt-2 leading-6 text-gray-200">
        Welcome to <strong>www.prayagrajmaghmela.com</strong>, your guide to experiencing
        the spiritual essence of the Magh Mela. Dive into authentic insights, rituals, and
        services that celebrate India's cultural heritage.
      </p>
    </section>

    <!-- Contact Us Section -->
    <section aria-labelledby="footer-contact">
      <h2 id="footer-contact" class="text-[#ffcc00] text-lg md:text-xl font-medium">
        Contact Us
      </h2>
      <p class="text-sm sm:text-base leading-6 text-gray-200 mt-2">
        Email:
        <a href="mailto:kumbhexperienceindia@gmail.com" class="hover:underline">
          kumbhexperienceindia@gmail.com
        </a>
        <br />
        Phone:
        <a href="tel:+918932951318" class="hover:underline">
          +91 8932951318
        </a>
      </p>
      <p class="text-sm sm:text-base mt-2 text-gray-200">
        Address: Mutthiganj, Prayagraj, Uttar Pradesh
      </p>
      <div class="flex justify-center gap-4 mt-4 text-2xl md:text-xl">
        <a href="https://www.instagram.com/anantbhavyayatrallp/" aria-label="Instagram" class="hover:text-[#E1306C]">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="mailto:kumbhexperienceindia@gmail.com" aria-label="Email" class="hover:text-[#D44638]">
          <i class="fas fa-envelope"></i>
        </a>
        <a href="https://wa.me/+918932951318" aria-label="WhatsApp" class="hover:text-[#25D366]">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.linkedin.com/in/prayagraj-kumbh-mela-176b03339/" aria-label="LinkedIn" class="hover:text-[#0077b5]">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=61569489230062" aria-label="Facebook" class="hover:text-[#1877F2]">
          <i class="fab fa-facebook"></i>
        </a>
      </div>
    </section>

    <!-- Important Links Section -->
    <section aria-labelledby="footer-links">
      <h2 id="footer-links" class="text-[#ffcc00] text-lg md:text-xl mb-2 font-medium">
        Important Links
      </h2>
      <nav class="flex flex-col space-y-2">
        <a href="{{ url('/about') }}" class="hover:text-[#ffcc00] hover:underline">About Us</a>
        <a href="{{ url('/privacy') }}" class="hover:text-[#ffcc00] hover:underline">Privacy Policy</a>
        <a href="{{ url('/refund') }}" class="hover:text-[#ffcc00] hover:underline">Refund Policy</a>
        <a href="{{ url('/terms') }}" class="hover:text-[#ffcc00] hover:underline">Terms &amp; Conditions</a>
        <a href="/sitemap.xml" class="hover:text-[#ffcc00] hover:underline">SiteMap</a>
      </nav>
    </section>
  </div>

  <!-- Footer Image -->
  <div class="mt-6">
    <img
      class="w-full"
      src="{{ asset('frontend/img/footer.webp') }}"
      alt="Magh Mela Tour Packages Footer"
    />
  </div>
</footer>
