import Alpine from 'alpinejs';
import ApexCharts from 'apexcharts';

document.addEventListener('alpine:init', () => {
    Alpine.data('chartOne', () => ({
        init() {
            const options = {
                chart: { type: 'bar', height: 350 },
                series: [{ name: 'Jumlah Siswa', data: [30, 45, 20] }],
                xaxis: { categories: ['TK', 'SD', 'SMP'] },
                colors: ['#2563eb'],
                title: { text: 'Pendidikan Siswa' }
            };
            this.chart = new ApexCharts(this.$refs.chartOne, options);
            this.chart.render();
        }
    }));
});