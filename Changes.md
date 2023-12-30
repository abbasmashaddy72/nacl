# Change Logs

## Common Fix

- Menu should not go up - **Done**

## Slot Management

- In slots provide option to choose single lane or multiple lane - **Will be Fixed with below matter**
- Sports Should have an option to add no of lanes that will be used max_lane to be used - helper text for (max_lane for 0 none lane sport activity) - **Done**
- In Slot Adding Check if max_lane from sport and add it lane should nullable or default -1 - **Done**
- Charges/Price - Base Price - **Done**
- Base Time - Helper text for time (minutes) - **Done**
- Add Repeater Selection
- dollar symbol - Where every amount - **Done**
- Change Lane Statuses to Lane Status - **Done**
- Add Sport Selection Multi Lane Selection - **in Lane Booking**

## Shop

- New product Image section to be changed with media picker - **Done**

## Site Management

- Common Data page empty - **Done**
- Rich text box to be added in Product, Brand and Category page - **Done**
- Replace 'Contact Us Management' to Contact Us, 'About Management' to 'About Section' - **Done**

## Blog

- Blog issue when Editing - **Done**

## Fix For Side Bar - Need to Add to Package

```blade
@if (FilamentView::hasSpaMode())
    ax-load="visible"
@else
    ax-load
@endif
```

## Hiding The Scrollbar to make it look like our previous theme

```css
.scrollbar-hidden::-webkit-scrollbar {
    display: none;
}

.scrollbar-hidden {
    scrollbar-width: none;
}
```
