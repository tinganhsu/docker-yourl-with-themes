FROM yourls:latest


ENV INF_VERSION 1.7.1


#install infinity squared theme
RUN set -eux; \
    curl -o infinity-squared.tar.gz -fsSL "https://github.com/tomslominski/infinity-squared/archive/${INF_VERSION}.tar.gz"; \
    tar -xf infinity-squared.tar.gz -C /usr/src/; \
    mv /usr/src/infinity-squared-${INF_VERSION}/* /usr/src/yourls/; \
    rm infinity-squared.tar.gz; \
#install zh_tw
    curl -o zh_TW.mo -fsSL "https://raw.githubusercontent.com/AlexisKerib/YOURLS-zh_TW/master/zh_TW.mo"; \
    mv zh_TW.mo /usr/src/yourls/user/languages/; \
    curl -o zh_TW.po -fsSL "https://raw.githubusercontent.com/AlexisKerib/YOURLS-zh_TW/master/zh_TW.po"; \
    mv zh_TW.po /usr/src/yourls/user/languages/; \
    chown -R www-data:www-data /usr/src/yourls
COPY config-public.php /usr/src/yourls/public/config.php
