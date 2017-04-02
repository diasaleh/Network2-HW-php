set terminal png
set output 'image.png'


set xdata time
set timefmt "%H:%M"
set yrange [0:100]
plot "dataa.txt" using 1:2 with lines 

