-- all book holdings
book, instrument, quantity

select *
from book b
;

select
b.name
from book b
;

-- book_entity
select
b.id as book_id,
b.name as book_name,
e.name as entity_name
from book b
inner join
entity e
where e.id = b.entity_id
;

-- book_entity_holding
select
*
from holding_position h
inner join
(
select
b.id as book_id,
b.name as book_name,
e.name as entity_name
from book b
inner join
entity e
where e.id = b.entity_id
) book_entity
where h.book_id = book_entity.book_id
;


-- book_entity_instrument_quantity
create view as book_entity_instrument_quantity
select
book_entity.book_name,
-- h.book_id,
-- h.instrument_id,
book_entity.entity_name,
i.name as instrument_name,
h.quantity
from holding_position h
inner join

(
select
b.id as book_id,
b.name as book_name,
e.name as entity_name
from book b
inner join
entity e
where e.id = b.entity_id
) book_entity
inner join
instrument i
where i.id = h.instrument_id
and h.book_id = book_entity.book_id
;
