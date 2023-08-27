<template>
    <div class="w-full h-full">
        <Line :data="data" :options="options" />
    </div>
  </template>
  
  <script>
    import {
        Chart as ChartJS,
        CategoryScale,
        LinearScale,
        PointElement,
        LineElement,
        Title,
        Tooltip,
        Legend
    } from 'chart.js'
    import { Line } from 'vue-chartjs'

  
  ChartJS.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Legend
  )
  
  export default {
    name: 'LineChart',
    components: {
      Line
    },
    data() {
      return {
        data:{
            labels: [
              'Usuário 1', 
              'Usuário 2', 
              'Usuário 3', 
              'Usuário 4', 
              'Usuário 5', 
              'Usuário 6', 
              'Usuário 7',
              'Usuário 8',
              'Usuário 9',
              'Usuário 10'
            ],
            datasets: [
                {
                label: 'Top 10 Usuários por Quantidade de Manutençoes',
                backgroundColor: '#4a60bd',
                data: [40, 39, 10, 40, 39, 80, 40, 16, 25, 19]
                }
            ]
        },
        options:{
            responsive: true,
            maintainAspectRatio: false
        }
      }
    }
  }
  </script>

