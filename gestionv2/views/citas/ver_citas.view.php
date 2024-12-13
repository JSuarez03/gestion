<!DOCTYPE html>
<html lang="es">
<head>
    <title>Citas</title>
    <?php 
        require_once "./views/templates/head.php";
    ?>
</head>
<body class="font-poppins">

    
<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-sky-600 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
<?php 
    require_once "./views/templates/menu.php";
?>
<!--
/**
* ? Aqui ya empieza el relleno fuera del menu
*/
--> 

 <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">Citas Registradas</h1> 
            <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
              <table class="w-full text-left table-auto min-w-max">
                  <thead>
                  <tr>
                      <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Nombre:</p>
                      </th>
                      <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Apellido</p>
                      </th>
                      <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                              Numero de Telefono
                          </p>
                      </th>
                      <th colspan="2" class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Acciones</p>
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              John Michael
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              Manager
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              23/04/18
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <button class="block text-sm antialiased font-medium leading-normal text-blue-gray-900 alert-button btn">
                              <svg class="fill-green-500 stroke-black w-7 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                              </svg>
                          </button>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <button href="#" class="confirm-button btn block text-sm antialiased font-medium leading-normal text-blue-gray-900">
                              <svg class="fill-red-800 stroke-black w-7 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                              </svg>
                          </button>
                      </td>
                  </tr>
                  <tr>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              John Michael
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              Manager
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              23/04/18
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <button class="block text-sm antialiased font-medium leading-normal text-blue-gray-900 alert-button btn">
                              <svg class="fill-green-500 stroke-black w-7 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                              </svg>
                          </button>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <button href="#" class="confirm-button btn block text-sm antialiased font-medium leading-normal text-blue-gray-900">
                              <svg class="fill-red-800 stroke-black w-7 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                              </svg>
                          </button>
                      </td>
                  </tr>
                  <tr>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              John Michael
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              Manager
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              23/04/18
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <button class="block text-sm antialiased font-medium leading-normal text-blue-gray-900 alert-button btn">
                              <svg class="fill-green-500 stroke-black w-7 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                              </svg>
                          </button>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <button href="#" class="confirm-button btn block text-sm antialiased font-medium leading-normal text-blue-gray-900">
                              <svg class="fill-red-800 stroke-black w-7 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                              </svg>
                          </button>
                      </td>
                  </tr>
                  <tr>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              John Michael
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              Manager
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <p class="block text-sm antialiased font-normal leading-normal text-blue-gray-900">
                              23/04/18
                          </p>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <button class="block text-sm antialiased font-medium leading-normal text-blue-gray-900 alert-button btn">
                              <svg class="fill-green-500 stroke-black w-7 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                              </svg>
                          </button>
                      </td>
                      <td class="p-4 border-b border-blue-gray-50">
                          <button href="#" class="confirm-button btn block text-sm antialiased font-medium leading-normal text-blue-gray-900">
                              <svg class="fill-red-800 stroke-black w-7 size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                              </svg>
                          </button>
                      </td>
                  </tr>
                  </tbody>
              </table>
            </div>
    </div>
 </div>


 
</body>
</html>