
    // If you want smooth animation while showing/hiding the dropdown, you can use JavaScript
    document.querySelectorAll('.faculty-dropdown').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.querySelector('.dropdown-content').style.display = 'block';
        });
    
        item.addEventListener('mouseleave', function() {
            this.querySelector('.dropdown-content').style.display = 'none';
        });
    });
    
    
    // JavaScript for dropdown menu
    document.addEventListener("DOMContentLoaded", function() {
        // Get all dropdown buttons
        var dropdowns = document.querySelectorAll('.faculty-dropdown, .more-dropdown');
    
        // Toggle dropdown content when clicking on dropdown button
        dropdowns.forEach(function(dropdown) {
            dropdown.addEventListener('click', function() {
                this.querySelector('.dropdown-content').classList.toggle('show');
            });
        });
    
        // Close dropdowns when clicking outside
        window.onclick = function(event) {
            if (!event.target.matches('.faculty-dropdown, .more-dropdown')) {
                var dropdowns = document.querySelectorAll('.dropdown-content');
                dropdowns.forEach(function(dropdown) {
                    if (dropdown.classList.contains('show')) {
                        dropdown.classList.remove('show');
                    }
                });
            }
        }
    });
    
    
   
document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.contain');
    var windowHeight = window.innerHeight;
    
    function checkPosition() {
        for (var i = 0; i < elements.length; i++) {
            var element = elements[i];
            var positionFromTop = element.getBoundingClientRect().top;
            if (positionFromTop - windowHeight <= 1) {
                element.classList.add('animate');
            }
        }
    }
    
    // Run the checkPosition function on page load and scroll
    window.addEventListener('load', checkPosition);
    window.addEventListener('scroll', checkPosition);
});
