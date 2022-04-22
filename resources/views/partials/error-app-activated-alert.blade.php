<div x-data="activationErrorModal" x-init="init()" x-show.transition="open_activation_error_alert" class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
  <div class="flex">
    <div class="py-1 mr-5">
      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
        <line x1="12" y1="8" x2="12" y2="12"></line>
        <line x1="12" y1="16" x2="12.01" y2="16"></line>
      </svg>
    </div>
    <div>
      <p class="font-bold">An error occurred while setting your app. please reload the app and try again</p>
      <p class="text-sm">The configuration settings is not activated</p>
    </div>
  </div>
</div>
