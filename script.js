
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
        var submitBtn = document.querySelector('input[type="button"]');

        submitBtn.addEventListener("click", function() {
            var firstname = document.getElementById("firstname").value;
            var lastname = document.getElementById("lastname").value;
            var age = document.getElementById("age").value;
            var gender = document.querySelector('input[name="gender"]:checked').value;
            var role = document.querySelector('input[name="role"]:checked').value;
            var faculty = document.querySelector('input[name="faculty"]:checked').value;
            var phoneCode = document.getElementById("phoneCode").value;
            var phone = document.getElementById("phone").value;
            var address = document.getElementById("address").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            console.log("Firstname:", firstname);
            console.log("Lastname:", lastname);
            console.log("Age:", age);
            console.log("Gender:", gender);
            console.log("Role:", role);
            console.log("Faculty:", faculty);
            console.log("Phone:", phoneCode + phone);
            console.log("Address:", address);
            console.log("Email:", email);
            console.log("Message:", message);
            alert("Submitted");
        });
    });
    // Detect when the element comes into view
document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.contain');
    var windowHeight = window.innerHeight;
    
    function checkPosition() {
        for (var i = 0; i < elements.length; i++) {
            var element = elements[i];
            var positionFromTop = element.getBoundingClientRect().top;
            if (positionFromTop - windowHeight <= 0) {
                element.classList.add('animate');
            }
        }
    }
    
    // Run the checkPosition function on page load and scroll
    window.addEventListener('load', checkPosition);
    window.addEventListener('scroll', checkPosition);
});
