FROM yourls:latest


ENV SLEEKY_VERSION 2.4.1

#install zh_tw
RUN set -eux; \
    curl -o zh_TW.mo -fsSL "https://raw.githubusercontent.com/AlexisKerib/YOURLS-zh_TW/master/zh_TW.mo"; \
    mv zh_TW.mo /usr/src/yourls/user/languages/; \
    curl -o zh_TW.po -fsSL "https://raw.githubusercontent.com/AlexisKerib/YOURLS-zh_TW/master/zh_TW.po"; \
    mv zh_TW.po /usr/src/yourls/user/languages/

#install sleeky theme
RUN set -eux; \
    curl -o sleeky.tar.gz -fsSL "https://github.com/Flynntes/Sleeky/archive/v${SLEEKY_VERSION}.tar.gz"; \
    tar -xf sleeky.tar.gz -C /usr/src; \
    rm sleeky.tar.gz; \
    mv /usr/src/Sleeky-${SLEEKY_VERSION}/sleeky-backend /usr/src/yourls/user/plugins/; \
    mv /usr/src/Sleeky-${SLEEKY_VERSION}/sleeky-frontend/* /usr/src/yourls; \
    chown -R www-data:www-data /usr/src/yourls

COPY config-frontend.php /usr/src/yourls/frontend/config.php
