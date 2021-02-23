<template>
  <layout>
    <div class="mt-8">
      <div class="flex justify-between">
        <h2 class="text-3xl text-gray-700 font-bold">المسوقات</h2>
      
      </div>
      <div class="mt-4">
        <div class="flex flex-col">
          <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6">
            <div
              class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200"
            >
              <table class="min-w-full">
                <thead class="bg-gray-100">
                  <tr>
                    <th
                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                      style="text-align: start"
                    >
                      #
                    </th>
                    <th
                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                      style="text-align: start"
                    >
                      أسم المسوقه
                    </th>
                    <th
                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                      style="text-align: start"
                    >
                      رقم الهاتف
                    </th>
                    <th
                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                      style="text-align: start"
                    >
                      التاريخ
                    </th>
                    <th
                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                      style="text-align: start"
                    >
                      الرصيد
                    </th>

                
                  </tr>
                </thead>
                <tbody class="bg-white text-gray-700">
                  <tr v-for="order in orders.data" :key="order.id">
                    <td
                      class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"
                    >
                      <span>
                        {{ order.user.id }}
                      </span>
                    </td>
                    <td
                      class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"
                    >
                      <inertia-link
                        :href="`/dashboard/markters/${order.id}`"
                        class="text-orange-600 px-1 hover:text-indigo-900"
                      >
                        {{ order.user.name }}
                      </inertia-link>
                    </td>

                    <td
                      class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"
                    >
                      <span>
                        {{order.user.phone }}
                      </span>
                    </td>
                    <td
                      class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"
                    >
                      {{order.created_at }}
                    </td>

                    <td
                      class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"
                    >
                      <span>
                        {{order.user.balance }}
                      </span>
                    </td>
               
                  </tr>
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
 
    </div>
  </layout>
</template>

<script>
import Layout from "../../../Shared/Layout";
import Pagination from "../../../Shared/Pagination";

export default {
  components: {
    Layout,
    Pagination,
  },
  props: ["users", "orders", "products"],
};
</script>
