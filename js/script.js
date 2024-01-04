// sidebar mobile view toggle
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');
const notificationBox = document.getElementById('notification-box')
const studentDetailsBox = document.getElementById('student-details-box')

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar-active');
    notificationBox.classList.toggle('notification-box-toggle'); 
});

// dropdown
function toggleDropdown(linkSelector, dropdownSelector, chevronId, sidebarClass) {
    const dropdownLink = document.querySelector(linkSelector);
    const dropdown = document.querySelector(dropdownSelector);
    const sidebar = document.getElementById('sidebar');
  
    dropdownLink.addEventListener('click', () => {
      dropdown.classList.toggle('active');
      
      // Toggle the sidebar class
      sidebar.classList.toggle(sidebarClass);
    });
  }

// refreshes page content - for the refresh button
// const refreshButton = document.getElementById('refresh-button');
// const refreshContent = document.getElementById('refresh-content');

// refreshButton.addEventListener('click', function() {
//     location.reload();
// });

