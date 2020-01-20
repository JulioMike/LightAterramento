clearvars, clc, close all

set(0,'defaultfigureposition',[204    87   769   591]);

set(0,'DefaultLineLineWidth',3);
set(0,'DefaultAxesFontSize',18);
set(0,'DefaultAxesFontName','Calibri');
set(0,'DefaultFigureColormap',feval('jet'));

Escala = 6600/1;
GPR = Escala*0.6358;

d  = importdata([cd '\Malha_Light_Passo_1m.txt']);
v = Escala*d(:,3);
x = d(:,1);
y = d(:,2);

dx = 1;
x = min(x):dx:max(x);
y = min(y):dx:max(y);
[X,Y] = meshgrid(x,y);

V = reshape(v,numel(y),numel(x));

% x2 = [0 2 0 17 27.6 24.6 40 40 40 52.3 70.1 69.6 66 92.3 93.9 98.3 113.4 109.7 113.4] + 40;
% y2 = [2 20.6 32.4 29.4 17.6 1.9 2 25.7 32.4 -4.6 -4.8 6.9 26.9 25.7 22.4 -4.4 -4.6 7.4 19.4] + 7.6;

x2d = [0 2 0 17.0 27.6 22.3 36.3 36.3 36.3 49.3 70.1 70.1 66 92.3 89.3 98.3 113.4 109.7 113.4] + 40;
y2d = [2 19.8 32.4 34.6 17.6 2.5 5.3 22.2 28.6 -4.3 -4.8 4.3 26.9 22.4 25.4 -4.4 -4.6 9.9 21] + 7.6;

N = numel(x2d);

[Tempo_calculo2, erro2, Vest2, Vpasso2, Vtoque2] = estima_v(X, Y, x, y, V, GPR, x2d,y2d);

x2od = x2d; y2od = y2d;

auxiliar = size(x2od);

Vmax2 = max(Vest2(:))
Vpasso_max2 = max(Vpasso2(:))
Vtoque_max2 = max(max(Vtoque2))

%% Funções
function [Tempo_calculo, erro, Vest, Vpasso, Vtoque] = estima_v(X, Y, x, y, V, GPR,x2,y2)

v2 = griddata(X,Y,V,x2,y2,'natural');  %Potencial estimado nos pontos especificados

x2 = x2'; 
y2 = y2';
v2 = v2';

dxq = 1;
xq = min(x):dxq:max(x);
yq = min(y):dxq:max(y);

[Xq,Yq] = meshgrid(xq,yq);

% Trecho para o cálculo do Vest (plotar o gráfico)

Vest_aux = scatteredInterpolant(x2,y2,v2,'natural','none');
Vest = Vest_aux(X,Y);

dv = Vest - V;
dvp = 100*(Vest - V)./V;
erro = rms(dv(~isnan(dv)));

figure
contourf(X,Y,Vest), xlabel('{\itx} (m)'), ylabel('{\ity} (m)'),
axis equal; title('Potencial de superfície'); colorbar

s = size(Vest);
Vpasso = zeros(s);
Vtoque = Vpasso;

% xp e yp contem os valores de x e y que pertencem a regiao,
% como um conjunto de pares ordenados [xp(i), yp(i)];

%Cálculo da tensão de passo máxima em todas as direções
tic
for i = 1:s(2)
    for j = 1:s(1)
%         if(periferia(j,i) == 1)
        a = (abs((Xq-xq(i)).^2+(Yq-yq(j)).^2 - 1) < 0.1);
        Vpasso(j,i) = max(abs(Vest(a)-Vest(j,i)));
        Vtoque(j,i) = max(abs(GPR-Vest(a)));
    end
end

Tempo_calculo = toc

figure
contourf(X,Y,Vpasso), xlabel('{\itx} (m)'), ylabel('{\ity} (m)'), zlabel('Tensão de passo (V)'), shading('flat')
axis equal, colorbar
title('Tensão de Passo(V)')
figure
contourf(X,Y,Vtoque), xlabel('{\itx} (m)'), ylabel('{\ity} (m)'), zlabel('Tensão de toque (V)'), shading('flat')
axis equal, colorbar
title('Tensão de Toque(V)')
end