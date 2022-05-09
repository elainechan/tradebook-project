create view large_holdings as
select
h.book_id,
bj.book_name,
h.instrument_id,
i.name as instrument_name,
h.quantity
from holding_position h
inner join
(
    select
    b.id as book_id,
    b.name as book_name,
    bt.name as book_type
    from book b
    inner join
    book_type bt where b.book_type_id = bt.id
) bj
inner join
instrument i
where h.book_id = bj.book_id
and i.id = h.instrument_id
and h.quantity > 3000000
;
