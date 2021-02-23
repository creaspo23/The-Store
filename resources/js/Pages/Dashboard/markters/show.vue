<template>
  <layout>
    <div class="mt-8">
      <div class="flex">
        <h2 class="text-3xl text-indigo-500 font-bold">
          <span class="text-gray-700"> المسوقه</span>
        </h2>
      </div>
      <!-- md:max-w-3xl -->

      <base-panel class="mt-4">
        <div v-for="(orderDetail, key) in this.orderDetails" :key="key">
          <p class="text-indigo-500 font-bold text-xl">
            اسم المسوقه
            <span class="text-gray-700">
              {{ orderDetail.order.user.name }}
            </span>
          </p>
          <p class="text-indigo-500 font-bold text-xl">
            رقم الهاتف :
            <span class="text-gray-700">
              {{ orderDetail.order.user.phone }}
            </span>
          </p>
          <p class="text-indigo-500 font-bold text-xl">
            التاريخ :
            <span class="text-gray-700">
              {{ orderDetail.order.user.created_at }}
            </span>
          </p>
          <p class="text-indigo-500 font-bold text-xl">
            عموله المسوقه في المنتجات :
            <span class="text-gray-700">
              {{ commission }}
            </span>
          </p>
        </div>
      </base-panel>

      <base-panel class="mt-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
          <div
            v-for="(orderDetail, key) in this.orderDetails"
            :key="key"
            class="mt-4 flex flex-col justify-center items-center max-w-sm mx-auto"
          >
            <div>
              <img
                class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center"
                :src="orderDetail.image"
              />
            </div>

            <div
              class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden"
            >
              <h3
                class="py-2 text-center font-bold uppercase tracking-wide text-gray-800"
              >
                {{ orderDetail.product.name }}
              </h3>
              <div
                class="flex items-center justify-between py-2 px-3 bg-gray-200"
              >
                <span class="text-gray-800 font-bold"
                  >SDG {{ orderDetail.product.total_price }}</span
                >
                <div>
                  <button
                    class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700"
                  >
                    {{ orderDetail.quantity }}
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </base-panel>
    </div>
  </layout>
</template>

<script>
import Layout from "../../../Shared/Layout";

export default {
  components: {
    Layout,
  },
  props: ["orderDetails","commission"],
  computed: {},
  data() {
    return {
      // order:[],
    };
  },
  created() {
    // this.order = this.order;
  },
  methods: {
    deleteOrder() {},
  },
};
</script>
