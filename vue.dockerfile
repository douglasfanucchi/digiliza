FROM node:lts-alpine

WORKDIR /app

COPY ./frontend/package*.json .

RUN yarn

CMD ["yarn", "serve"]