<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-left col-4">
                <p>&copy; <?php echo date('Y'); ?> <?php echo env('APP_NAME'); ?>. All rights reserved.</p>
            </div>
            <div class="footer-right col-8">
                <ul>
                    <li>
                        <a href="{{ route('privacy') }}">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}">Terms of Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>