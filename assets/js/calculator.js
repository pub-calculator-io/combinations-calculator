function calculate(){

  // 1. init & validate
  const n = input.get('n').whole().val();
  const r = input.get('r').whole().val();
  if(n < r) input.error('n', 'Please enter n ≥ r ≥ 0');
  if(!input.valid()) return;

  // 2. calculate
  const result = math.combinations(math.bignumber(n), math.bignumber(r));

  // 3. output
  _('result').innerHTML = result.toFixed().length > 500 ? result : result.toFixed();

}

window.addEventListener('load', () => math.config({number: 'BigNumber', precision: 500}));
