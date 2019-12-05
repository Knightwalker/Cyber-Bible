<?php include($_SERVER['DOCUMENT_ROOT'] . "/header.php") ?>

<div id="cpp_grid">
  <div id="cpp_sidebar">
    <div class="sidebarButton">Introduction</div>
    <div class="sidebarButton">Data Types</div>
    <div class="sidebarButton">Variables</div>
    <div class="cpp_sidebar_h1">Solutions</div>
    <div class="cpp_sidebar_h2">Algebra</div>
    <div>Quadratic Equation</div>
    <div>Greatest Common Divisor</div>
  </div>
  <div class="cpp_main">

    <div id="cpp_stl">
      <h1>The C++ Standard Template Library (STL)</h1> 
      <h2>Introduction</h2>
      <p>The Standard Template Library (STL) is a set of components specified by the ISO C++ standard and shipped with identical behavior (modulo performance) by every C++ implementation. STL provides the best implementation of the common programming data structures, such as lists, stacks, arrays, etc and also the algorithms and functions, which work over those data structures. For portability and longterm maintainability, it is strongly recommend that we use the standard library whenever feasible.</p>
      
      <h2>Overview</h2>
      <p><b>The STL consists of four components:</b></p>
      <ul class="ul_custom">
        <li>Algorithms</li>
        <li>Containers</li>
        <li>Functions</li>
        <li>Iterators</li>
      </ul>

      <h2>1. Algorithms</h2>
      There are about 80 standard algorithms defined in <span class="cpp_header cpp_header_color">&lt;algorithm&gt;</span> header. They operate on sequences defined by a pair of iterators (for inputs) or a single iterator (for outputs). 

      <ul class="ul_custom">
        <li>Nonmodifying Sequence Algorithms:</li>
        <li>Modifying Sequence Algorithms:</li>
      </ul>

      <h2>2. Containers</h2>
      <p>A container holds a sequence of objects.</p>
      <ul class="ul_custom">
        <li>Sequence Containers: provide access to (half-open) sequences of elements.</li>
        <ul class="ul_custom">
          <li>vector&lt;T,A&gt;</li>
          <li>list&lt;T,A&gt;</li>
          <li>forward_list&lt;T,A&gt;</li>
          <li>deque&lt;T,A&gt;</li>
        </ul>
        <br/>
        <li>Associative Containers: provide associative lookup based on a key.</li>
        Ordered Associative Containers
        <ul class="ul_custom">
          <li>map&lt;K,V,C,A&gt;</li>
          <li>multimap&lt;K,V,C,A&gt;</li>
          <li>set&lt;K,C,A&gt;</li>
          <li>multiset&lt;K,C,A&gt;</li>
        </ul>
        <br/>
        Unordered Associative Containers
        <ul class="ul_custom">
          <li>unordered_map&lt;K,V,H,E,A&gt;</li>
          <li>unordered_multimap&lt;K,V,H,E,A&gt;</li>
          <li>unordered_set&lt;K,H,E,A&gt;</li>
          <li>unordered_multiset&lt;K,H,E,A&gt;</li>
        </ul>
        <br/>
        <li>Container Adaptors: provide specialized access to underlying containers.</li>
        <ul class="ul_custom">
          <li>stack&lt;T,C&gt;</li>
          <li>queue&lt;T,C&gt;</li>
          <li>priority_queue&lt;T,C,Cmp&gt;</li>
        </ul>
        <br/>
        <li>Almost Containers: sequences of elements that provide most, but not all, of the facilities of a container.</li>
        <ul class="ul_custom">
          <li>T[N]</li>
          <li>array&lt;T,N&gt;</li>
          <li>basic_string&lt;C,Tr,A&gt;</li>
          <li>string</li>
          <li>u16string</li>
          <li>u32string</li>
          <li>wstring</li>
          <li>valarray&lt;T&gt;</li>
          <li>bitset&lt;N&gt;</li>
          <li>pair&lt;T,U&gt;</li>
          <li>tuple&lt;T...&gt;</li>
          <li>vector&lt;bool&gt;</li>
        </ul>
      </ul>


    </div> <!-- END cpp_vector -->

  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>