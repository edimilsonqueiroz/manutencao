<template>
  <div class="w-full h-full">
    <Doughnut :data="data" :options="options" />
  </div>
</template>

<script>
import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js'
import { Doughnut } from 'vue-chartjs'


ChartJS.register(ArcElement, Tooltip, Legend)

export default {
  name: 'DoughnutChart',
  components: {
    Doughnut
  },
  data() {
    return {
      data:{
        labels: ['Itafarma','Itafarma - Pará'],
        datasets: [
          {
            label: 'Manutenções por Empresa',
            backgroundColor: ['#41B883', '#DD1B16'],
            data: [40, 10]
          }
        ]
      },
      options:{
        responsive: true,
        maintainAspectRatio: false
      },

    }
  }
}
</script>
