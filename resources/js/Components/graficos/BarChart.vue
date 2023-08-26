<script>
    import { Bar } from 'vue-chartjs';
    import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js';

    ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale);

    export default {
        components:{
            Bar,
        },

        data() {
            return {
                chartData: {
                    labels: [ 
                        'Janeiro', 
                        'Fevereiro', 
                        'Março', 
                        'Abril', 
                        'Maio', 
                        'Junho', 
                        'Julho', 
                        'Agosto', 
                        'Setembro', 
                        'Outubro', 
                        'Novembro', 
                        'Dezembro' 
                    ],
                    datasets: [ {
                            label: 'Total de Manutenções',
                            backgroundColor: '#4a60bd', 
                            data: [40, 20, 12, 15, 35, 40, 18, 25, 23, 21, 19, 29] 
                        } 
                    ]
                },
                chartOptions: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }
        }
    }
</script>
<template>
    <div class="w-full h-full">
        <Bar
            id="my-chart-id"
            :options="chartOptions"
            :data="chartData"
        />
    </div>
</template>