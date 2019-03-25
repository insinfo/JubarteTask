CREATE TABLE "ServidoresConcursados" (
  "id" serial NOT NULL ,
  "cpf" varchar(255) COLLATE "pg_catalog"."default",
  "nome" varchar(255) COLLATE "pg_catalog"."default",
  "matricula" varchar(255) COLLATE "pg_catalog"."default",
  "cargo" varchar(255) COLLATE "pg_catalog"."default",
  "lotacao" varchar(255) COLLATE "pg_catalog"."default",
  "admissao" date,
  "tipo" varchar(255) COLLATE "pg_catalog"."default",
  CONSTRAINT "ServidoresConcursados_pkey" PRIMARY KEY ("id")
)
WITH (OIDS=TRUE)
;
