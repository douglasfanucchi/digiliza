FROM node:lts-alpine

WORKDIR /app

RUN yarn

CMD ["yarn", "serve"]